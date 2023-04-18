@include('includes.header')
  <main id="root">
    <div class="app-category">
      <div class="container-xxl">
        <div class="app-draw--wrapper h-auto">
          <div class="row gap-3 mx-0">
            <section class="tools-board col">
              <div class="row">
                <label class="title">Shapes</label>
                <ul class="options">
                  <li class="option tool" id="rectangle">
                    <img src="icons/rectangle.svg" alt="">
                    <span>Rectangle</span>
                  </li>
                  <li class="option tool" id="circle">
                    <img src="icons/circle.svg" alt="">
                    <span>Circle</span>
                  </li>
                  <li class="option tool" id="triangle">
                    <img src="icons/triangle.svg" alt="">
                    <span>Triangle</span>
                  </li>
                  <li class="option">
                    <input type="checkbox" id="fill-color">
                    <label for="fill-color">Fill color</label>
                  </li>
                </ul>
              </div>
              <div class="row">
                <label class="title">Options</label>
                <ul class="options">
                  <li class="option active tool" id="brush">
                    <img src="icons/brush.svg" alt="">
                    <span>Brush</span>
                  </li>
                  <li class="option tool" id="eraser">
                    <img src="icons/eraser.svg" alt="">
                    <span>Eraser</span>
                  </li>
                  <li class="option">
                    <input type="range" id="size-slider" min="1" max="30" value="5">
                  </li>
                </ul>
              </div>
              <div class="row colors">
                <label class="title">Colors</label>
                <ul class="options">
                  <li class="option"></li>
                  <li class="option selected"></li>
                  <li class="option"></li>
                  <li class="option"></li>
                  <li class="option">
                    <input type="color" id="color-picker" value="#4A98F7">
                  </li>
                </ul>
              </div>
              <div class="row buttons">
                <button class="clear-canvas">Clear Canvas</button>
                <button class="save-img">Save As Image</button>
              </div>
            </section>
            <section class="drawing-board col p-0">
              <canvas></canvas>

            </section>
          </div>

          <div class="text-end col-12 mt-4">
            <a href="chat" class="back-btn">
              <img src="front/image/back-arrow.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  @include('includes.footer')
</body>

</html>