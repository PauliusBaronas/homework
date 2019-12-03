<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Vesper+Libre&display=swap" rel="stylesheet">
    <style>
        .font {
            font-family: 'Vesper Libre', serif;
        }
    </style>

    <title>Pica</title>
</head>

<body>
    <form>
        <div class="container">
            <div class="row border border-primary text-danger font">
                <h1> Daugiau niekada nepermokėkite už picą </h1>
            </div>
            <div class="row border border-primary">
                <div class="col-sm font border border-primary">
                    <h3> Mažosios picos </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_small" placeholder="'Dodo' Champion maža">
                        <small id="textHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Picos skersmuo </label>
                            <input type="text" class="form-control" id="validationDefault01" value="25" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">matavimo vienetas </label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" required>
                        </div>
                        <div class="input-group mb-3">
                        <div class=" border border-primary">
                            Kaina
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Eur</div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="9.99">
                        </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault01"> Picų kiekis </label>
                            <input type="number" class="form-control" id="validationDefault01" value="1" required>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                </div>
                <div class="col-sm border border-primary">
                    <canvas id="pizza"> <script type="text/javascript">
                        'use strict'

let toRadians = (deg) => deg * Math.PI / 180
let map = (val, a1, a2, b1, b2) => b1 + (val - a1) * (b2 - b1) / (a2 - a1)

class Pizza {
  constructor(id) {
    this.canvas = document.getElementById(id)
    this.ctx = this.canvas.getContext('2d')

    this.sliceCount = 6
    this.sliceSize = 80

    this.width = this.height = this.canvas.height = this.canvas.width = this.sliceSize * 2 + 50
    this.center = this.height / 2 | 0

    this.sliceDegree = 360 / this.sliceCount
    this.sliceRadians = toRadians(this.sliceDegree)
    this.progress = 0
    this.cooldown = 10

  }

  update() {
    let ctx = this.ctx
    ctx.clearRect(0, 0, this.width, this.height)

    if (--this.cooldown < 0) this.progress += this.sliceRadians*0.01 + this.progress * 0.07

    ctx.save()
    ctx.translate(this.center, this.center)
    
    for (let i = this.sliceCount - 1; i > 0; i--) {

      let rad
      if (i === this.sliceCount - 1) {
        let ii = this.sliceCount - 1

        rad = this.sliceRadians * i + this.progress

        ctx.strokeStyle = '#FBC02D'
        cheese(ctx, rad, .9, ii, this.sliceSize, this.sliceDegree)
        cheese(ctx, rad, .6, ii, this.sliceSize, this.sliceDegree)
        cheese(ctx, rad, .5, ii, this.sliceSize, this.sliceDegree)
        cheese(ctx, rad, .3, ii, this.sliceSize, this.sliceDegree)

      } else rad = this.sliceRadians * i
      
      // border
      ctx.beginPath()
      ctx.lineCap = 'butt'
      ctx.lineWidth = 11
      ctx.arc(0, 0, this.sliceSize, rad, rad + this.sliceRadians)
      ctx.strokeStyle = '#F57F17'
      ctx.stroke()

      // slice
      let startX = this.sliceSize * Math.cos(rad)
      let startY = this.sliceSize * Math.sin(rad)
      let endX = this.sliceSize * Math.cos(rad + this.sliceRadians)
      let endY = this.sliceSize * Math.sin(rad + this.sliceRadians)
      let varriation = [0.9,0.7,1.1,1.2]
      ctx.fillStyle = '#FBC02D'
      ctx.beginPath()
      ctx.moveTo(0, 0)
      ctx.lineTo(startX, startY)
      ctx.arc(0, 0, this.sliceSize, rad, rad + this.sliceRadians)
      ctx.lineTo(0, 0)
      ctx.closePath()
      ctx.fill()
      ctx.lineWidth = .3
      ctx.stroke()

      // meat
      let x = this.sliceSize * .65 * Math.cos(rad + this.sliceRadians / 2)
      let y = this.sliceSize * .65 * Math.sin(rad + this.sliceRadians / 2)
      ctx.beginPath()
      ctx.arc(x, y, this.sliceDegree / 6, 0, 2 * Math.PI)
      ctx.fillStyle = '#D84315'
      ctx.fill()

    }

    ctx.restore()

    if (this.progress > this.sliceRadians) {
      ctx.translate(this.center, this.center)
      ctx.rotate(-this.sliceDegree * Math.PI / 180)
      ctx.translate(-this.center, -this.center)

      this.progress = 0
      this.cooldown = 20
    }

  }

}

function cheese(ctx, rad, multi, ii, sliceSize, sliceDegree) {
  let x1 = sliceSize * multi * Math.cos(toRadians(ii * sliceDegree) - .2)
  let y1 = sliceSize * multi * Math.sin(toRadians(ii * sliceDegree) - .2)
  let x2 = sliceSize * multi * Math.cos(rad + .2)
  let y2 = sliceSize * multi * Math.sin(rad + .2)

  let csx = sliceSize * Math.cos(rad)
  let csy = sliceSize * Math.sin(rad)

  var d = Math.sqrt((x1 - csx) * (x1 - csx) + (y1 - csy) * (y1 - csy))
  ctx.beginPath()
  ctx.lineCap = 'round'

  let percentage = map(d, 15, 70, 1.2, 0.2)

  let tx = x1 + (x2 - x1) * percentage
  let ty = y1 + (y2 - y1) * percentage
  ctx.moveTo(x1, y1)
  ctx.lineTo(tx, ty)

  tx = x2 + (x1 - x2) * percentage
  ty = y2 + (y1 - y2) * percentage
  ctx.moveTo(x2, y2)
  ctx.lineTo(tx, ty)

  ctx.lineWidth = map(d, 0, 100, 20, 2)
  ctx.stroke()
}

let pizza = new Pizza('pizza')

;(function update() {
  requestAnimationFrame(update)
  pizza.update()

}())
                    </script></canvas>
                </div>
                <div class="col-sm font border border-primary">
                    <h3> Didžioji pica </h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Picos pavadinimas</label>
                        <input type="text" class="form-control" id="name_large" placeholder="'Dodo' Vegetariška didelė">
                        <small id="emailHelp" class="form-text text-muted">Pavadinkite picą taip, jog atsimintumėte kitai analizei</small>
                    </div>
                    <div class="form-row">
                        <div class="col-6 mb-3">
                            <label for="validationDefault01">Picos skersmuo</label>
                            <input type="text" class="form-control" id="validationDefault01" value="25" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault02">matavimo vienetas</label>
                            <input type="text" class="form-control" id="validationDefault02" value="cm" required>
                        </div>
                        <div class=" border border-primary">
                            Kaina
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="validationDefault01"> Picų kiekis </label>
                            <input type="number" class="form-control" id="validationDefault01" value="1" required>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Išsaugoti picą tolimesnei analizei</label>
                    </div>
                </div>

            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>

</html>