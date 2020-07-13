# Scripts em Python

[![N|Solid](https://static.wixstatic.com/media/a98016_4e23d2aaa99f4712b2fa123f3ef8601f~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01/__-2.webp)](https://pingtecnologia.com.br/servicos)
Ping Tecnologia é uma empresa que presta serviços de informática em geral.

Seção de scripts em python para diversos objetivos de rede:

  - Infraestrutura
  - Segurança
  - Otimização

# SSH_ZBX_EDITOR

> Script em python que se conecta no servidores Linux e altera
> o arquivo de configuração Zabbix da forma que desejar.
> Criado por [Kevin Yan](https://github.com/naynivek/anycodes/tree/master/Python)

### Modo de execução

-Necessário ter instalado o python3.
-Necessário importar o módulo pexpect.
```sh
pip3 install pexpect
```

O script necessita de um argumento que é o IP ou nome da maquina.

```sh
./ssh_zbx_edit <host>
```

Exemplo:

```sh
./ssh_zbx_edit 192.168.0.1
```
```sh
./ssh_zbx_edit server01
```

# GET_URL_STATUS

> Script em python que se conecta em servidores via protocolo http/https
> e retorna o status do servidor.
> Criado por [Kevin Yan](https://github.com/naynivek/anycodes/tree/master/Python)

### Modo de execução

-Necessário ter instalado o python3.

-O script necessita de um argumento que é o IP ou nome da maquina
-O script suporta um segundo argumento que é a porta do site (default=80). Porém ele não é requisito obrigatório.

```sh
./get_url_status <url>
```

Exemplo:

```sh
./get_url_status pingtecnologia.com.br 443
```
```sh
./et_url_status uol.com.br 80
```




**Free Scripts, Hell Yeah!**


