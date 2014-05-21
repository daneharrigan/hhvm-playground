<!doctype html>
<style>
* {
  padding: 0;
  margin: 0;
}

body {
  background: #fafafa;
}

#results, form {
  font-family: "Helvetica Neue", Helvetica, Arial, "lucida grande", sans-serif;
  color: #4e5665;
}

section {
  position: fixed;
  top: 20px;
  bottom: 80px;
  width: 48%;
  border: 1px solid #eee;
  background: #fff;
}

#code {
  left: 20px;
}

#source {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

#results {
  right: 20px;
}

#results div {
  position: relative;
  padding: 10px;
}

#code form {
  position: absolute;
  bottom: -70px;
}

#code form button {
  border: none;
  background: #fd8724;
  color: #fff;
  padding: 20px;
  font-size: 16px;
  font-weight: bold;
}
</style>

<script src="http://ajaxorg.github.io/ace-builds/src/ace.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){
  var editor = ace.edit("source");
  editor.getSession().setUseWorker(false);
  editor.setTheme("ace/theme/github");

  var view = document.querySelector("button")
  view.addEventListener("click", function(e){
    e.preventDefault()
    var req = new XMLHttpRequest()
    req.addEventListener("load", function(response){
      var result = document.querySelector("#results > div")
      result.innerHTML = response.currentTarget.response
    })

    var payload = "source=" + encodeURIComponent(editor.getValue())
    req.open("POST", "/view", true)
    req.send(payload)
  })
})
</script>
<main>
  <section id="code">
    <div id="source"></div>
    <button type="submit">Compile</button>
  </section>
  <section id="results">
    <div></div>
  </section>
</main>
