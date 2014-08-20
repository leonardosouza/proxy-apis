Proxy em PHP (Utiliza cURL) para acesso de apis públicas
========================================================


Exemplos de APIS:
-----------------

- http://avisobrasil.com.br/correio-control/api-de-consulta-de-cep/
- http://postmon.com.br/
- http://developers.agenciaideias.com.br/
- http://fipeapi.appspot.com/


Como usar:
----------

```sh
$ git clone https://github.com/leonardosouza/proxy-apis.git && cd proxy-apis
$ php -S localhost:8080
```

No browser:
-----------

http://localhost:8080/proxy.php?url={URL_DA_API}