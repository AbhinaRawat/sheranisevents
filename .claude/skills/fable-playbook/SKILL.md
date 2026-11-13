---
name: fable-playbook
description: Working method for any non-trivial task in this repo - how to plan, how to break work into steps, and how to check the result before reporting. Use at the start of any task that touches more than one file, changes behaviour a visitor or customer can see, involves the payment or form-handling code, or where the request is ambiguous.
---

# Playbook: plan, break down, verify

This is a working method, not a checklist to recite. Skip any part that
obviously does not apply to a small task; a one-line typo fix needs none of it.
The parts that matter most are marked **Do not skip**.

## 1. Before planning: find out what is actually true

Most bad plans come from planning against an imagined codebase.

- Read the code the task touches before deciding anything. Open the file, do
  not guess its contents from its name.
- Trace one real path end to end. For a page: which PHP file renders it, what
  it includes (`header_tags.php`, `footer.php`), which CSS and JS it loads,
  where its data comes from. For a form: the markup, the JS that submits it,
  the PHP that receives it (`send.php`, `upload_testimonial.php`), and what
  happens to the data after.
- Search for other users of anything you intend to change. A class in
  `style.css` or a shared include is used by pages you have not opened.
- Separate what you observed from what you inferred. "I read it" and "it
  probably works like this" are different, and only the first one can carry a
  plan. If a plan depends on an inference, go and check it.

Restate the request in one sentence, including what "done" looks like. If you
cannot, the request is ambiguous: resolve it from the code and sensible
defaults where you can, and ask only when the answer would change what you
build and is genuinely the user's call.

## 2. Planning

- Aim for the smallest change that fully solves the problem. Do not refactor
  nearby code, rename things, or add features nobody asked for. If you see
  something else worth fixing, mention it at the end instead of doing it.
- Match what is already there: the existing style, structure, libraries, and
  naming. This is a plain PHP site; do not introduce a framework or build step
  to solve a local problem.
- Decide how you will verify the work *before* you write it. If you cannot name
  a check that would fail when the work is wrong, you do not yet understand the
  task well enough.
- Identify the risky part and do it first. If one piece might turn out to be
  impossible or to change the whole approach, find that out before building
  the easy parts around it.
- When two approaches look close, pick one and state why in a sentence. Do not
  present a survey of options unless the choice is the user's to make.

## 3. Breaking the work into steps

- Each step should leave things working and be checkable on its own. "Add the
  field to the form, the handler, and the email" is three steps, each with its
  own check, not one.
- Order by dependency, then by risk: things other steps need come first, and
  among independent steps the uncertain one comes first.
- Check each step when you finish it, not all of them at the end. An error
  found one step later is cheap; found five steps later, you no longer know
  which step caused it.
- Keep a visible task list for anything over about three steps, and update it
  as you go. Mark a step done only after its check passes.
- If a step reveals the plan was wrong, stop and re-plan. Do not push through
  on a plan you now know is based on a wrong assumption.
- Run independent lookups in parallel (several file reads or searches in one
  turn). Run dependent actions strictly in order.

## 4. Checking your own work  (**Do not skip**)

The rule: **a claim that something works needs evidence from running it.**
Reading your own code and finding it convincing is not evidence.

In order of strength, use the strongest check available:

1. **Run the real thing.** Serve the site and load the page:

   ```bash
   php -S localhost:8000
   ```

   Then drive it with the pre-installed Playwright/Chromium: load the page,
   take a screenshot, look at it, and read the browser console for errors.
   For layout work, check a phone width (about 375px) as well as desktop.
2. **Exercise the specific behaviour.** Submit the form, click the button,
   request the endpoint with `curl`. Try the failure case too: empty input,
   an oversized upload, a missing field.
3. **Static checks.** `php -l file.php` on every PHP file you touched. This
   catches syntax errors only; it is a floor, not proof.
4. **Re-read the diff.** Run `git diff` and read every changed line as if
   someone else wrote it. Look for leftover debug output, unrelated changes,
   and edits you did not intend.

Then ask these questions about the finished work:

- Did I solve what was asked, or a nearby problem that was easier?
- What else uses what I changed, and did I check it still works?
- What happens with empty, very long, or malicious input?
- If the fix "works", do I know *why* the original was broken? A fix you
  cannot explain is likely masking the cause.

Never make a check pass by weakening it: do not delete a failing test,
suppress an error, or hard-code the expected value.

### Extra care in this repo

- **`payment/` and anything touching money:** never test against live payment
  credentials or trigger a real charge. Read the code path and verify with
  whatever test mode exists; if none exists, say that this part is unverified.
- **Form handlers and uploads** (`send.php`, `upload_testimonial.php`,
  `getTestimonials.php`): validate and escape all user input, restrict upload
  type and size, and never echo raw input back into HTML.
- **Secrets:** do not commit keys, passwords, or SMTP credentials. If you find
  one already in the code, tell the user rather than quietly moving it.
- **SEO surfaces** (`sitemap.xml`, `robots.txt`, `ads.txt`, the meta tags in
  `header_tags.php`): a new or renamed page usually needs the sitemap updated.
  Do not change `ads.txt` or `robots.txt` unless asked.
- **Sending real email:** do not fire the contact form at real recipients to
  test it without the user's agreement.

## 5. When something goes wrong

- Read the whole error message before acting on it. Most errors say what is
  wrong.
- Reproduce the problem before fixing it, so you can tell afterwards that the
  fix worked.
- Change one thing at a time. If two changes go in together you cannot tell
  which one mattered.
- If the same approach has failed twice, stop repeating it. Go back to step 1
  and question an assumption; the bug is usually somewhere you were sure about.
- An ordinary obstacle (an error, a timeout, an empty result) is something to
  diagnose and work through. A deliberate barrier (a denied permission, a file
  marked not to touch) is something to report and work around, not through.

## 6. Actions that need the user's go-ahead

Ask before doing anything hard to undo or visible to other people: deleting
files or data, force-pushing, pushing to a branch other than the assigned one,
opening a pull request, sending email, or posting anywhere external. Agreement
given for one action does not carry over to the next one. Look at what you are
about to delete or overwrite before you do it.

## 7. Reporting  (**Do not skip**)

The user will act on your report without re-checking it, so it must be exact.

- Lead with the outcome: what changed and whether it works.
- Say what you verified and how, and separately what you did not verify and
  why. "Loaded the page and submitted the form locally; did not test real
  email delivery" is a good sentence.
- If something failed or was skipped, say so plainly, with the output.
- Do not say "should work" about something you could have run. Run it, then
  say what happened.
- Keep it short. Reference code as `file:line`. Leave out the story of how you
  got there unless the user needs it to trust the result.
