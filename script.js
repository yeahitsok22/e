document.getElementById("loginForm").addEventListener("submit", function(event) {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  if (!username || !password) {
    alert("يجب تعبئة جميع الحقول!");
    event.preventDefault(); // يمنع إرسال النموذج
  } else {
    console.log("الحقول تمام، جاري الإرسال 🥳");
  }
});
