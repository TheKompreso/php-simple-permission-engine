# simple-rights-engine
A simple system of distribution of rights and access control. (I reinvent the wheel again)

# DataBase (MySQL)
You can add a "rights" field to your user management system. (example)
| userid | rights |
| ---    | ------ |
| 1      |   0    |
| 2      |   9    |

# Rights to be issued to users (example of distribution of rights) 
| num         | name                  |
| ----------- | --------------------- |
| 0b00000000  | powerless             |
| 0b00000001  | tester                |
| 0b00000010  | helper                |
| 0b00000100  | moderator             |
| 0b00001000  | senior moderator      |
| 0b00010000  | administrator         |
| 0b00100000  | general Administrator |
| 0b01000000  | contentmaker          |

When granting rights to a user, it is worth specifying the amount of rights. (example: user_rights = gen_moder+moder+helper)

# Functions
After turning on the include, you can immediately call any of the listed functions.

Function: **StrictRightsCheck**
```php
SimpleRightsEngine::StrictRightsCheck($userrights, $requiredrights)
```
>Checks $userrights for an exact match of $requiredrights

Function: **CheckOneOfRights**
```php
SimpleRightsEngine::CheckOneOfRights($userrights, $requiredrights)
```
>Checks if $userrights matches at least one bit of $requiredrights

Function: **AddRights**
```php
SimpleRightsEngine::AddRights($userrights, $addedrights)
```
>Adds new rights to $userrights $addedrights

Function: **RemoveRights**
```php
SimpleRightsEngine::RemoveRights($userrights, $removedrights)
```
>Removes all $removedrights rights from $userrights

# Examples
**Granting rights to a user**
```php
$user_rights += SRE_Rights::contentmaker;
```
```php
$user_rights = SRE_Rights::helper + SRE_Rights::moder + SRE_Rights::gen_moder + SRE_Rights::tester;
```
```php
if(SimpleRightsEngine::CheckOneOfRights($user_rights, SRE_Rights::admin + SRE_Rights::gen_admin)){}
```
