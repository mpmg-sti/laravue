# Roteiro de Mudanças

Todas as mudanças importantes  em `Laravue` são documentadas neste arquivo.

## 8.24.136 - 17/mai/2021
### Adicionado
- Acentuação nas palavras Número(s) e Funcionário(s).
- Hooks no controller: afterFilter e save.
### Alterado
- Correção de erro no monitoramento.
- Nova foto padrão de perfil de usuário.

## 8.22.134 - 23/abr/2021
### Alterado
- Subfission/cas, dependência alterada de ˆ4.0 para dev-master.

## 8.22.133 - 20/abr/2021
### Adicionado
- Plural de palavras terminadas em 'r'.
- Relacionamento MxN.
- Suporte para Label nos selects.
- Geração ambiente Docker na instalação
- Suporte ao novo ambiente unificado
### Alterado
- Suporte ao input array command.
- Correções menores.
- Processo de Instalação.

## 8.14.106 - 16/dez/2020
### Adicionado
- Seeder Funcionário MP na instalação.
- Geração de códigos pode ser feita em Windows com a opção -o ( --outdocker ).
- Geração de tratamento de campos booleanos nos controladores.
- Geração de tratamento de campos booleanos nos relatórios.
- Geração de tratamento de campos de data nos controladores.
- Geração de tratamento de campos de data nos relatórios.
### Alterado
- Correções menores.
  
## 8.9.105 - 04/dez/2020
### Adicionado
- Geração do nome da tabela no modelo.
- Acentuação de todas as palavras em títulos compostos.
- Geração de valores default para os fields. Ex: laravue:build Model -f stringField:s.#'string Value'#,indexField:i.#1002# 
- Geração da cláusa unsigned. (Valores numerais não negativos): field:i.+
- Obrigação de HTTPS nos ambientes de homologação e produção.
- Opção de geração fora do docker (--outdocker ou -o).
- Acentuação das palavras nos títulos.
### Alterado
- Foto de avatar no perfil de acesso.
- Ordenação no LaravueDatatale
- Correções menores.
  
- ## 8.5.98 - 27/nov/2020
### Adicionado
- Geração de código com suporte a VeeValidate 3.x.
- Transformação para CamelCase no modelo passado para o comando build.
- Suporte Unique (.u) nas migrations e controllers.
- Suporte Unique Array (.u*) nas migrations e controllers.
- Filtro de Modelo genérico para geração de relatório.
- Geração da pasta de relatórios.
### Alterado
- Atualização do VeeValidate para a versão 3.x.
- Ajuste na geração de filtros.
- Suporte ao FieldLike em index para campos booleanos.
- Correções menores.

## 8.4.83 - 16/nov/2020
### Adicionado
- Geração de relacionamentos 1*n nos modelos.
- Plural de palavras terminadas em 'al', 'il', 'ol', 'm'.
- Plural e acentuação nos títulos dos relatórios.

## 8.4.80 - 13/nov/2020
### Adicionado
- Suporte a geração no frontend de campos do tipo 'time'.
- Suporte a inserção de relacionamentos nos modelos.

### Alterado
- Geração de campo input como padrão no caso de não haver previsão no tipo selecionado.
- Correções menores.

## 8.3.79 - 12/nov/2020
### Adicionado
- Suporte Nullable (.n) nas migrations e controllers.
- Suporte a tamanho de string (s.#) nas migrations e Controllers.
- Adicionado Nullable nas chaves estrangeiras nas migrations.
### Alterado
- Correções diversas.

## 8.0.0 - 27/out/2020
### Adicionado
- Tudo, versão inicial.
