# invoiceninja-gl

Traducción extraoficial ao galego de [Invoice Ninja](http://invoiceninja.com/)

## Instalación:

Clona o repositorio no directorio onde estan aloxados o resto de idiomas, nun subdirectorio chamado `gl`:

```sh
git clone https://github.com/asociaciondag/invoiceninja-gl.git resources/lang/gl
```

Edita manualmente a base de datos, engadindo o idioma na táboa `languages`:

```sql
INSERT INTO languages (name, locale) VALUES ('Galician', 'gl');
```

Borrar a caché da aplicación:

```sh
php artisan cache:clear
```

Listo, xa podes escoller o idioma nas preferencias da aplicación.
