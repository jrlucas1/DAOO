## Rotas do Usuário
### POST /login
Autentica um usuário e retorna um token.

### POST /register
Registra um novo usuário.

### POST /logout
Desconecta o usuário autenticado.

## Rotas de Animais
### GET /animais
Obtém todos os animais.

### POST /animais
Cria um novo animal (apenas para administradores).

### GET /animais/{animal}
Obtém informações sobre um animal específico.

### PUT /animais/{animal}
Atualiza informações sobre um animal específico (apenas para administradores).

### DELETE /animais/{animal}
Exclui um animal específico (apenas para administradores).

### GET /animais/user/{user}
Obtém todos os animais de um usuário específico.

## Rotas de Atividades
### GET /atividades
Obtém todas as atividades.

### POST /atividades
Cria uma nova atividade (apenas para administradores).

### GET /atividades/{atividade}
Obtém informações sobre uma atividade específica.

### PUT /atividades/{atividade}
Atualiza informações sobre uma atividade específica (apenas para administradores).

### DELETE /atividades/{atividade}
Exclui uma atividade específica (apenas para administradores).

### GET /atividades/user/{user}
Obtém todas as atividades de um usuário específico.

### GET /atividades/produto/{produto}
Obtém todas as atividades com um produto específico.

### GET /atividadesquery
Obtém atividades com produtos e usuário.

## Rotas de Produtos
### GET /produtos
Obtém todos os produtos.

### POST /produtos
Cria um novo produto (apenas para administradores e gerentes).

### GET /produtos/{produto}
Obtém informações sobre um produto específico.

### PUT /produtos/{produto}
Atualiza informações sobre um produto específico (apenas para administradores e gerentes).

### DELETE /produtos/{produto}
Exclui um produto específico (apenas para administradores e gerentes).

### GET /produtos/user/{user}
Obtém todos os produtos de um usuário específico.

### GET /produtos/atividade/{atividade}
Obtém todos os produtos de uma atividade específica.
