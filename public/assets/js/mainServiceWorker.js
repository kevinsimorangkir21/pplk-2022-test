if ("serviceWorker" in navigator) {
  window.addEventListener("load", function () {
    navigator.serviceWorker.register("assets/js/serviceWorker.js").then(
      function (registration) {
        // Registration was successful
      },
      function (err) {
        // registration failed :(
        console.log("ServiceWorker registration failed: ", err);
      }
    );
  });
}