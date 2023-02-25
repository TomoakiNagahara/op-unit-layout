Unit of Layout for onepiece-framework
===

# File location

 The Layout is placed in the following directory.

```
asset:/layout/
```

 The Layout uses a common template files.

```
asset:/template/layout/
```

# Config

 The config file is in the following path: `asset:/config/layout.php`

```php:layout.php
return [
  'execute' =>  true,
  'name'    => 'white',
];
```

## Options

| key name | type    | value |
| ---      | ---     | ---   |
| execute  | boolean | `true` does Layout. |
| name     | string  | The name of the Layout to use. |
| darkmode | boolean | The darkmode setting. OS settings are reflected. |

# Usage

## Turn off Layout

```php
//  Standard
OP()->Config('layout', ['execute' => false]);

//  Shortcut
OP()->Layout(false);
```

## Dynamic Layout change

```php
//  Standard
OP()->Config('layout', ['name' => 'Layout_name']);

//  Shortcut
OP()->Layout('Layout_name');
```
