NGINX_STATS

> Script em bash para coletar dados do nginx
> deve ser utilizado como item no zabbix
>
> Criado por [Kevin Yan]

### Modo de execução

- Necessário ativar o módulo stub_status no nginx

```sh
./nginx_stats -h

#######################################################
nginx_stats -c <HOST>

-h - Show this help
-l - Show active connections
-b - Show accepted connections
-c - Show handled connections
-r - Show requests by connections
-d - Show reading connection header of request
-e - Show writing answer client connections
-f - Show Waiting connections or inactive connections
-a - Show all data
#######################################################

```
