<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <img src="data:image/png;base64,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">
  
  <div class="container text-center">
  <div class="row">
    <div class="col">
      ელევატორების სტატიკური გამოკვლევა
    </div>
    <div class="col">
      კითხვარი
    </div>
  </div>

  <h2>ნაწილი I. საიდენტიფიკაციო მონაცემები</h2>

<table class="table table-bordered" style="width:100%">
  <tr>
  <td>ინტერვიუერის სახელი, გვარი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>საწარმოს (ორგანიზაციის) სრული დასახელება</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>გადასახადის გადამხდელის საიდენტიფიკაციო კოდი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>სტატისტიკური რეესტრის საიდენტიფიკაციო ნომერი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>რესპონდენტის სახელი და გვარი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>რესპონდენტის ტელეფონის ნომერი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ძირითადი ეკონომიკური საქმიანობის სახე</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>უმთავრესი არაძირითადი ეკონომიკური საქმიანობის სახე</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <th>იურიდიული მისამართი</th>
  </tr>
  <tr>
    <td>მუნიციპალიტეტი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ქალაქი, დაბა, თემი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>სოფელი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ქუჩა და სხვა მისამართი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <th>ფაქტიური მისამართი</th>
  </tr>
  <tr>
    <td>მუნიციპალიტეტი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ქალაქი, დაბა, თემი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>სოფელი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ქუჩა და სხვა მისამართი</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
</table>




<h2>ნაწილი II. ზოგადი მაჩვენებელი</h2>
<table class="table table-bordered" style="width:100%">
  <tr>
    <td>ქუჩა და სხვა მისამართი</td>
    <td>#</td>
    <td>რაოდენობა / მოცულობა</td>
    <td>კომენტარი</td>
  </tr>
  <tr>
    <td>მომხმარებელთა რაოდენობა, რომლებსაც გაეწია მომსახურება, სულ (ერთეული)</td>
    <td>01</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>მწარმოებელთა და/ან გადამყიდველთა რაოდენობა რომელთაგან შესყიდულ იქნა პროდუქცია შემდგომი რეალიზაციის მიზნით, სულ (ერთეული)</td>
    <td>02</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>დასაქმებულთა საშუალო თვიური რაოდენობა (ერთეული)</td>
    <td>03</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
  <tr>
    <td>ელევატორის კვარტალური ხარჯი, მომსახურე პერსონალის ანაზღაურების გარდა (ლარი)</td>
    <td>04</td>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
    <th><input type="text" class="form-control" id="example" placeholder=""> </th>
  </tr>
</table>

<h2>ნაწილი III. მონაცემები პროდუქციის შენახვასთან დაკავშირებით (შენიშვნა: 3.3-3.4 კითხვები ეხება მომსახურების სახით შენახულ პროდუქტებს (3.2.3 კითხვით განსაზღვრული)</h2>

<h2>ნაწილი IV. ელევატორის საცავების საშუალო დღიური დატვირთვა თვეების მიხედვით, % (შენიშვნა: შეავსეთ შესაბამისი კვარტლის თვეები)</h2>

<h2>ნაწილი V. მონაცემები გაყიდული პროდუქციის შესახებ</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>