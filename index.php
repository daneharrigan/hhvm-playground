<!doctype html>
<style>
* {
  padding: 0;
  margin: 0;
}

body {
  background: #fafafa;
}

section {
  position: fixed;
  top: 20px;
  bottom: 80px;
  left: 20px;
  width: 48%;
  border: 1px solid #eee;
  background: #fff;
}

section:last-child {
  left: auto;
  right: 20px;
}

section > div {
  position: absolute;
  width: 100%;
  height: 100%;
  
}

button {
  font: bold 16px "Helvetica Neue", Helvetica, Arial, "lucida grande", sans-serif;
  color: #fff;
  background: #fd8724;
  position: absolute;
  bottom: -70px;
  border: none;
  padding: 20px;
}

.ace_gutter {
  background: transparent !important;
}
</style>

<script src="http://ajaxorg.github.io/ace-builds/src/ace.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){
  var source = ace.edit("source");
  source.getSession().setUseWorker(false);
  source.setTheme("ace/theme/github");

  var result = ace.edit("result");
  result.getSession().setUseWorker(false);
  result.setTheme("ace/theme/github");

  var view = document.querySelector("button")
  view.addEventListener("click", function(e){
    e.preventDefault()
    var req = new XMLHttpRequest()
    req.addEventListener("load", function(response){
      result.setValue(response.currentTarget.response, 1)
    })

    req.open("POST", "/view", true)
    req.send(source.getValue())
  })
})
</script>
<main>
  <section>
    <div id="source"></div>
    <button type="submit">Compile</button>
  </section>
  <section>
    <div id="result"></div>
  </section>
</main>
