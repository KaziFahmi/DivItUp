<html>
  <script>
    function func()
    {
      let input = document.createElement('input');
  input.type = 'file';
  input.onchange = _ => {
    // you can use this method to get file and perform respective operations
            let files =   Array.from(input.files);
            console.log(files);
        };
  input.click();
  let f=document.getElementById("testStore");
  f.append(input);
  f.submit();
    }
  </script>
  <form action="" id="testStore">

  </form>
  <button onclick="func()"></button>
</html>
