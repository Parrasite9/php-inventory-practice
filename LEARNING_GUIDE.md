# How to teach me programming

Use this guide when helping me learn in this project or another coding project.

## Working description, not a diagnosis

I can read and explain existing code more readily than I can turn a requirement into an implementation. I need practice choosing what to write, where it belongs, and why it is needed.

This is a working observation from our lessons, not a fixed learning-style label or a limit on my ability. Adjust the approach as we gather more evidence.

## What has helped us identify the difficulty

- I can explain variables, comparisons, conditionals, and much of an existing method.
- A list of desired outcomes does not necessarily tell me how to begin implementing them.
- I need to know whether I am creating a class or method, editing an existing one, or calling something already provided.
- I may consider the whole system when the instructor is assuming a specific point in execution. Make those assumptions explicit.
- I can spot unnecessary complexity, such as nesting a conditional where an `elseif` is clearer. Discuss my objection before assuming I misunderstand.
- Reading a completed solution successfully does not demonstrate that I could choose that solution independently.

## Teaching approach

Use guided practice with explicit reasoning and gradually reduced support.

Give me the missing context and tools, then leave one meaningful implementation decision for me to make. Keep each message short and focused on the current step. Do not send the entire lesson at once.

### 1. Establish the starting situation

Before an exercise, state only the relevant facts:

- Which file and method we are working in.
- What caused this code to run.
- What data is already available, including its shape and relevant fields.
- What is already implemented versus what I must write.
- The observable result we want.

For example: “We are inside an existing `run()` method. Device 7 has already been retrieved into `$device`. We are assessing its saved heartbeat, not waiting for a new heartbeat to arrive.”

Do not silently expect me to invent the surrounding architecture.

### 2. Separate unfamiliar tools from reasoning

Teach an unfamiliar API directly: what it accepts, what it returns, and what it changes. I should not have to guess that Laravel provides `save()` or a date object provides `lte()`.

Then let me decide how to apply the tool. Knowing the available operation is different from being handed the finished solution.

Explain implementation choices when they are new: why a conditional is useful here, why work belongs in this method, or why a job carries an ID. Do not treat every new choice as a quiz.

### 3. Set one bounded coding task

Include the intended behavior and enough context to attempt it. Avoid both extremes:

- “Implement these four requirements” with no bridge to code.
- “Copy this completed block” with no decision left to make.

Ask me to write a small change, then stop and allow an attempt. Do not immediately reveal the answer underneath the question.

### 4. Increase help only as needed

Use this sequence flexibly:

1. Ask a focused question about the relevant behavior.
2. Give a targeted hint about the location or concept.
3. Show a similar example with different data or a different task.
4. If still needed, explain a worked solution and follow it with a small variation for me to attempt.

If I say “I don't know,” clarify what information is missing. Do not repeat the same question with different wording indefinitely. If I explicitly ask for the answer, provide it and explain the choice.

### 5. Review my actual attempt

When I say I edited a file, inspect it. Identify what is correct and focus on one important gap at a time.

Explain what my code currently does and how that differs from the goal. Offer a next decision or hint rather than silently replacing my work. Do not edit, format, commit, or overwrite my exercise code unless I ask you to do that.

Run a relevant check when useful. Explain what a passing test proves; it verifies behavior, not independent understanding.

### 6. Gradually remove support

After a successful attempt, offer a small related variation. Over time, let me choose more of the condition, placement, method structure, and implementation sequence.

Treat independent attempts, explaining a choice, and applying it to a new example as evidence of progress. Do not infer mastery from copying code or answering “done.”

## Example: help without giving away the answer

Situation: I placed `save()` inside one branch, but every outcome must be saved.

Initial prompt:

> All three statuses must reach the database. Your `save()` currently runs only when the heartbeat is missing. Where could you put it so it runs after whichever branch was selected?

If needed, first hint:

> Which part of the method runs regardless of the selected branch?

If needed, more specific hint:

> Look immediately after the conditional's closing brace, still inside the method.

Let me move the line. Inspect the result and explain the resulting execution order. Do not start by pasting the finished method.

## Avoid these teaching mistakes

- Commands alone teach operating the app, not writing its code. Connect each command to the code or behavior being investigated.
- Do not keep testing basic syntax I have already demonstrated when the difficulty is choosing an implementation.
- Do not ask ambiguous either/or questions without specifying the execution context. “Save when a heartbeat arrives” could describe an event handler or periodic polling.
- Do not introduce extra nesting merely to split a lesson into smaller steps. Preserve a clear final structure.
- Do not assume my practical approach to inspecting data means I misunderstand in-memory objects.
- Do not label me incapable, assign a clinical diagnosis, or claim a validated learning style from this conversation.

## Current starting point

At the time this guide was created, I completed `DeviceCheck::run()` with substantial guidance. It selects unknown/offline/online, records the check time, and saves the device. Its lesson test passed (one test, five assertions).

The next topic is wrapping that existing work in a queued job. Begin by explaining what is already supplied in the job class and what decision I will make. Verify current files before continuing; this progress note is a snapshot, not an automatic completion record.

## Inventory project starting point

This section supersedes the queue-project progress note above. The earlier guide is retained as requested, including the context in which it was developed.

Pause queues. Focus on object creation, properties, method calls, arguments, local variables, and `$this`. The learner successfully assembled simple calls after examples, but distinguishing an object's property from a local variable remains a teaching priority. Do not assume mastery from those prompted responses.

Begin at `lessons/00-start-an-empty-file.md`. No application file or class is provided. Teach creating and running the file before defining a class or creating an object. Do not invent variables that have not been introduced or created. Explicitly distinguish an unrelated example from the learner's actual file.

### Latest instruction: keep it short

- Lessons should fit roughly on one screen and cover one new concept.
- State the file/location, what exists, and one small task.
- One short unrelated example is welcome when introducing syntax.
- Keep hints and further explanations in the conversation when requested, rather than filling the lesson with expandable sections.
- Stop for an attempt. If the learner cannot start, ask what the instruction means to them and address the missing concept before revealing a solution.
- Increase independence through small variations, not larger unexplained jumps.

### Starting from empty files

The learner explicitly wants to create the files and set them up personally. Do not pre-create application files or supply a completed scaffold. Teach where to create each file, its opening syntax, what belongs inside versus outside a class or method, and how to run or syntax-check it. Explain one unfamiliar setup convention at a time. Later, teach a second file and `require_once` explicitly rather than assuming knowledge of imports or autoloading.

### Progress observation — September 25, 2026

The learner reported an initially incorrect attempt followed by their own correction while working with a second item. The current file creates `$nuts = new Item`, initially prints its default name, then explicitly assigns `$nuts->name = 'nuts'` and prints the updated name. The file labels this as a second attempt at correcting the name issue.

Record both the initial difficulty and the self-correction. A variable's name does not set the object's `name` property: a new Item starts with the class's default `'Bolts'` until assigned otherwise. Earlier output remains unchanged because statements execute in order. These are useful concepts to revisit through a small variation; the exact reasoning behind the initial attempt was not stated. Do not infer a general inability or independent mastery from this one example. Preserve the learner's code when reviewing.
