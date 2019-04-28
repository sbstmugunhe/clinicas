
## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.

## Bake com adminLTE
cake bake all users --theme AdminLTE --prefix admin

use Cake\Auth\DefaultPasswordHasher; 
{
    protected function _setPassword($value){
        $hasher= new DefaultPasswordHasher();
        return $hasher->hash($value);
    }


Ver layout do template 
    1. src/Template/Element/nav-top.ctp
    2. src/Template/Element/aside-main-sidebar.ctp
    3. src/Template/Element/aside/user-panel.ctp
    4. src/Template/Element/aside/form.ctp
    5. src/Template/Element/aside/sidebar-menu.ctp
    6. src/Template/Element/aside-control-sidebar.ctp
    7. src/Template/Element/footer.ctp
