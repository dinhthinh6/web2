<section class="slider">
  <div class="container">
    <div class="slider-content">
      <div class="slider-content-left">
        <div class="slider-content-left-top-container">
          <div class="slider-content-left-top">
            <a href="#"><img
                src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/15/638144740085160370_F-H1_800x300.png"
                alt="thong tin"></a>
            <a href="#"><img
                src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/28/638155923862871292_F-H1_800x300.png"
                alt="thong tin"></a>
            <a href="#"><img
                src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/29/638156814931688580_F-H1_800x300.png"
                alt="thong tin"></a>
            <a href="#"><img
                src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/23/638151613183876311_F-H1_800x300.png"
                alt="thong tin"></a>
            <a href="#"><img
                src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/26/638154648270220390_F-H1_800x300.png"
                alt="thong tin"></a>
          </div>
          <div class="slider-content-left-top-icon">
            <i class="fas fa-chevron-left "></i>
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>

        <div class="slider-content-left-bottom">
          <ul>
            <li class="active">Tiêu đề 1</li>
            <li>Tiêu đề 2</li>
            <li>Tiêu đề 3</li>
            <li>Tiêu đề 4</li>
            <li>Tiêu đề 5</li>
          </ul>
        </div>
      </div>
      <div class="slider-content-right">
        <div class="right">
          <img
            src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/1/638108452578436423_F-H2_385x100.png"
            alt="thong tin">
        </div>
        <div class="right">
          <img
            src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/1/638108452578436423_F-H2_385x100.png"
            alt="thong tin">
        </div>
        <div class="right">
          <img
            src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/1/638108452578436423_F-H2_385x100.png"
            alt="thong tin">
        </div>
        <div class="right">
          <img
            src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/1/638108452578436423_F-H2_385x100.png"
            alt="thong tin">
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const imgnumber = document.querySelectorAll('.slider-content-left-top img')
  let index = 0
  const rightbtn = document.querySelector('.fa-chevron-right')
  const leftbtn = document.querySelector('.fa-chevron-left')
  rightbtn.addEventListener("click", function () {
    index = index + 1
    if (index > imgnumber.length - 1) {
      index = 0
    }
    removeactive()
    document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
    imgnumberli[index].classList.add("active")
  })
  leftbtn.addEventListener("click", function () {
    index = index - 1
    if (index < 0) {
      index = imgnumber.length - 1;
    }
    removeactive()
    document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
    imgnumberli[index].classList.add("active")
  })
  const imgnumberli = document.querySelectorAll('.slider-content-left-bottom ul li')

  imgnumberli.forEach(function (image, index) {
    image.addEventListener("click", function () {
      removeactive()
      document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
      image.classList.add("active")
    })
  })
  function removeactive() {
    let imgactive = document.querySelector('.active')
    imgactive.classList.remove("active")
  }
  function imgauto() {
    index = index + 1
    if (index > imgnumber.length - 1) {
      index = 0
    }
    removeactive()
    document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
    imgnumberli[index].classList.add("active")
  }
  setInterval(imgauto, 5000)
</script>