<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<button class="my-button" class="my-button"><p></p></button>

  <script src="script.js"></script>

</body>

<style>
.my-button {
    background-image: url('gif/add_105065.png');
    position: fixed;
  bottom: 0;
  right: 5%;
  height: auto;

  width: auto;
  padding: 10px;
  background-color: #f1f1f1;
  border: none;
  color: #333;
  cursor: pointer;
  margin: 1%;


}
.my-button:hover::after {
  content: "Agregar empleo";
  position: absolute;
  top: -20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 14px;

    
}
</style>
</html>
