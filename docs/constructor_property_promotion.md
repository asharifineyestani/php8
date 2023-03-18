
# Constructor Property Promotion
Constructor Property Promotion یک فیچر جدید است که به PHP 8 اضافه شده است. به وسیله ی آن می توان property های کلاس را از طریق متد constructor ایجاد کرد. با این کار دیگر نیازی به تایپ نام property در ابتدای کلاس نیست. حتی می توانید Access Modifier ها  ماننده Public , Protected و Private را هم همانجا به هر Property اضافه کنید.

به جای نوشتن کدهای زیر
```php
class User
{
    public string $name;
    public string $email;
    public DateTimeImmutable $birth_date;

    public function __construct(
        string $name,
        string $email,
        DateTimeImmutable $birth_date
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->birth_date = $birth_date;
    }
}
```

می توانید مانند زیر عمل کنید

```php
class User
{
public function __construct(
public string $name,
public string $email,
public DateTimeImmutable $birth_date,
) {}
}

```
