<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Web 25.26</title>
    <link rel="shortcut icon" href="imgs/logo_arco_vermelho.svg">
    <script src="js/tailwind4.1.js"></script>
    
</head>
<body>
    <?php require('includes/nav.php') ?>
    
    <form action="ajax/login.php" method="post">
    <div class="max-w-7xl mx-auto mt-16 p-18 bg-[rgb(56,142,60)]">
        <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Email
        </label>
        <input
          type="email"
          name="email"
          required
          value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#09A2AE] focus:border-[#09A2AE] px-3 py-2"
        >
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Palavra-passe
        </label>
        <input
          type="password"
          name="password"
          required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-[#09A2AE] focus:border-[#09A2AE] px-3 py-2"
        >
      </div>

      <button
        type="submit"
        class="w-full mt-4 cor text-white py-2 rounded-md font-medium hover:opacity-90 transition"
      >
        Entrar
      </button>
    </div>
</form>

    
</body>
</html>