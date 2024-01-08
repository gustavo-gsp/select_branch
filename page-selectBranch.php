<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('includes/html-head.php'); ?>
</head>
<body>
    <form action="/access-branch" method="post">            
        <h1>Seja bem vindo(a), <%=token.content.name%>!</h1>
        <h2>Por favor, escolha a sua filial:</h2>
        <div>
            <select name="selectBranch" id="selectBranch">
                <?php
                    foreach ($token->content['group'] as $group) {
                        $groupValue = substr($group, 1);
                        echo '<option value="' . $group . '">' . $groupValue . '</option>';
                    }
                ?>
            </select>
            <input type="submit">Entrar</input>
        </div>
    </form>
</body>
</html>