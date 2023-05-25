# P21_GDENERGIA

a) Os objetivos da sua aplicação?

O objetivo da aplicação é realizar toda a gestão energética consumida por cada cliente. Cada cliente terá toda a sua informação numa base de dados onde poderá essa ser consultada e alterada, sendo essa nome, morada, código de postal, número de telemóvel, número de contribuinte e dados de pagamento.
No final o utilizador terá acesso ao consumo médio de energia.

b) Os diferentes tipos de utilizadores da aplicação (mínimo 2 tipos)?

Administrador:
Utilizador:

c) As funcionalidades que deverá disponibilizar aos vários utilizadores?

Acessos:
Administrador - Todas as funcionalidade do Utilizador mais alteração do preço energético.
Utilizador - Consulta/alterar dados pessoais, alteração método de pagamento, consulta dos consumos energéticos, inserção de consumos energéticos.


importar db:
 C:\xampp\mysql\bin\mysql -u root nome_do_banco_de_dados < caminho_para_arquivo.sql

exportar db:
C:\xampp\mysql\bin\mysqldump -u root nome_do_banco_de_dados > caminho_para_arquivo.sql