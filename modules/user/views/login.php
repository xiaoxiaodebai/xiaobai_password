<div class="container">
    <h2 class="mb-4">用户登录</h2>
    <form action="/modules/user/actions.php?action=login" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">用户名</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">密码</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
    </form>
</div>
