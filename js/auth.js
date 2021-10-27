document.getElementById("btn").onclick = function(){
    var login = document.getElementById('login').value;
    var password = document.getElementById('password').value;
    if (login == 'admin' && password == '12345') alert ('Добро пожаловать!');
    else alert ('Вход запрещен!');	
  }