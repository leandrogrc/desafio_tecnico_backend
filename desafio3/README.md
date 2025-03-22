# DESAFIO PROESC BACKEND

## Problemas solicitados no desafio [corrigidos]

### -> É encontrado um erro na página inicial ao tentar navegar para página a "Produtos" ou "Categorias". Realize uma correção na navegação.

- **Correção:**
  - A rota na view "welcome" estava incorreta. Ela direcionava para "/produtos" e "/categorias", mas as rotas corretas são "/produtos/listar" e "/categorias/listar".
  - Para testar, basta acessar a rota "/" e clicar em qualquer um dos links "produtos" ou "categorias".

### -> Um usuário relatou dificuldades ao realizar o cadastro de uma nova categoria. Ao preencher os dados e apertar em "Salvar", mostra a mensagem de sucesso no entanto não é feito o cadastro. Realize uma correção nesse procedimento.

- **Correção:**
  - O formulário de cadastro de uma nova categoria estava usando o método GET ao invés de POST. Alterado no arquivo dentro de "resources/views/categorias/create.blade.php".
  - Para testar, basta criar uma nova categoria.

### -> Na página de listagem de Produtos, usuários identificaram que não está sendo exibido o nome da Categoria relacionada. Realize uma correção para exibir o nome correto da categoria vinculada ao produto.

- **Correção:**
  - O arquivo em app/models/product.php estava sem a relação do produto com a categoria. Implementado o relacionamento entre as tables do banco de dados através de uma função.
  - Para testar, basta acessar a página de produtos e verificar que na tabela as categorias relacionadas aos produtos estão sendo mostradas corretamente.

## Outros problemas encontrados [corrigidos]

### -> Alteração no App/Http/Requests/CategoryRequest.php;

- A descrição da categoria estava sendo salva no slug. Dessa forma, a descrição não era mostrada após a criação de uma categoria. Foi criada uma regra, assim como a existente para produtos;

### -> Notificações de criação/exclusão/atualização de categorias/produtos agora aparecem.

- Botão de dismiss para as notificação de criação/exclusão/atualização. (foi adicionado um source script do próprio Boostrap).

### -> Botões de editar/deletar agora estão melhor estilizados. UI melhorada.

- Foram inseridos dentro de um <div> estilizado com bootstrap, que já estava sendo usado nas views.
- Ao cliar em excluir um produto/categoria, é exibido uma confirmação para evitar exclusões acidentais (implementado com Javascript)

### -> Função de editar categoria corrigida.

- Criada a rota de uptade para categorias em routes/web.php -> "/categorias/{id}"
- Os campos de nome e descrição carregam os valores atuais corretamente na página de edição dentro dos campos correspondentes. A alteração é realizada com sucesso e redireciona para categorias/listar, antes redirecionava para produtos/listar, o que era contraintuitivo. Isso também acontecia após criar uma categoria.

### -> View de editar produto corrigida.

- Um erro de digitação na variável $product estava impedindo a página de ser renderizada. Ela estava escrita como $produto
