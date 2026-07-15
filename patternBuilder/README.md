# Builder Pattern

## Task

Implement the **Builder pattern** in PHP for constructing an `EmailMessage` step by step.

Instead of passing many constructor arguments, provide a **fluent builder** that sets fields one at a time and returns the finished object from `build()`.

## Rules

- Use a separate **`EmailMessage`** class (the product) and an **`EmailMessageBuilder`** class (the builder).
- Builder methods must be **chainable** (each setter returns `$this`).
- `build()` must return a fully constructed `EmailMessage`.
- `to` and `subject` are **required**; `body` is optional and defaults to an empty string.
- Do not use a large constructor with many parameters on `EmailMessage` — construction goes through the builder.
- After `build()`, the message fields should not be changed from outside (prefer `readonly` properties or no public setters on `EmailMessage`).

## Input

Builder usage (no single function argument — you construct via the builder API).

## Output

An `EmailMessage` instance from `$builder->build()`.

## Example

```php
$message = (new EmailMessageBuilder())
    ->to('user@example.com')
    ->subject('Welcome')
    ->body('Thanks for signing up.')
    ->build();
```

| Builder calls | Result |
|---------------|--------|
| `to('a@b.com')->subject('Hi')->build()` | `to: a@b.com`, `subject: Hi`, `body: ''` |
| `to('a@b.com')->subject('Hi')->body('Hello')->build()` | `to: a@b.com`, `subject: Hi`, `body: Hello` |

```text
Input:  to("dev@company.org"), subject("Deploy done"), body("Version 1.2 is live")
Output: EmailMessage { to: "dev@company.org", subject: "Deploy done", body: "Version 1.2 is live" }
```

```text
Input:  to("admin@site.io"), subject("Alert")
Output: EmailMessage { to: "admin@site.io", subject: "Alert", body: "" }
```

## Class signatures

```php
namespace PatternBuilder;

final class EmailMessage
{
    public function __construct(
        public readonly string $to,
        public readonly string $subject,
        public readonly string $body = '',
    ) {
    }
}

final class EmailMessageBuilder
{
    public function to(string $to): self;
    public function subject(string $subject): self;
    public function body(string $body): self;
    public function build(): EmailMessage;
}
```

Implement these classes in `php/email_message_builder.php`.

## Run tests

From the repository root, install dependencies once:

```bash
composer install
```

From this task directory (`patternBuilder`), run PHPUnit:

```bash
../vendor/bin/phpunit -c ../phpunit.xml php/PatternBuilderTest.php
```

<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PatternBuilderTest.php</code></p>
