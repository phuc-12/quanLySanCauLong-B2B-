<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Ví dụ localStorage</title>
</head>
<body>
  <h2>Nhập tên của bạn:</h2>
  <input type="text" id="usernameInput" placeholder="Nhập tên">
  <button onclick="saveName()">Lưu tên</button>
  <button onclick="clearName()">Xóa tên</button>

  <h3 id="greeting"></h3>

  <script>
    // Hàm lưu tên vào localStorage
    function saveName() {
      const name = document.getElementById("usernameInput").value;
      localStorage.setItem("username", name);
      showGreeting();
    }

    // Hàm xóa tên khỏi localStorage
    function clearName() {
      localStorage.removeItem("username");
      showGreeting();
    }

    // Hàm hiển thị lời chào
    function showGreeting() {
      const name = localStorage.getItem("username");
	  console.log(name);
      const greeting = document.getElementById("greeting");
      if (name) {
        greeting.textContent = "Xin chào, " + name + "!";
      } else {
        greeting.textContent = "Bạn chưa nhập tên.";
      }
    }

    // Gọi khi trang được tải lại
    showGreeting();
  </script>
</body>
</html>
