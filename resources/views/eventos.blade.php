@extends('layouts.body')

@section('section')



    <div class="container margin-nav">
        <div class="row justify-content-center" style="padding-bottom: 40px; padding-top: 40px;">

            <div class="col-lg-1"></div>
            <div class="col-lg-12 col-xs-12 col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                  <a href="#" id="show-modal">
                                    <img class="d-block" src="http://4.bp.blogspot.com/_kuWQ1c5M62g/S-IH_QKKcKI/AAAAAAAABR8/cQ6WHf1rZeo/s1600/pomelo.jpg"alt="First slide" style="width:100%; height:100%;" >
                                  </a>
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                  <a href="#" id="show-modal2">
                                    <img class="d-block" src="http://www.politicargentina.com/advf/imagenes/2016/11/58333a012dab4_750x517.jpg" alt="First slide" style="width:100%; height:100%;">
                                  </a>
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                  <a href="#" id="show-modal3">
                                    <img class="d-block" src="image/logo.png" alt="First slide" style="width:100%; height:100%;">
                                  </a>
                                </div>

                              </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4EK_GCCDgMwDfRd_UJ9o526oc0sFSb08dSZJfrJ15g3Gkmp0H" alt="Two slide" style="width:100%; height:100%;">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="https://2.bp.blogspot.com/-yhNDLz6SaRc/Wq3yV1xmAII/AAAAAAAAYD4/6LbLVAZnZm0Pi3gHuyGdnCbbeVxsJr4SACLcBGAs/s1600/DAMAS%2BGRATIS%2B-%2BEN%2BEL%2BLOLLAPALOOZA%2BARGENTINA%2B2018%2B%25281%2529.jpg" alt="Two slide" style="width:100%; height:100%; ">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="http://i1.wp.com/www.compromisodiario.com.ar/wp-content/uploads/2015/07/put9RQ0T.jpeg" alt="Two slide" style="width:100%; height:100%;">
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="https://i.ytimg.com/vi/XKyFFI4A2AQ/hqdefault.jpg" alt="Three slide" style="width:100%; height:100%;">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="image/fondo-recital.png" alt="Three slide" style="width:100%; height:100%;">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                                    <img class="d-block" src="https://www.themepunch.com/home/wp-content/uploads/2014/07/unlimited_height_5.jpg" alt="Three slide" style="width:100%; height:100%;">

                                </div>

                            </div>
                        </div>

                    </div>
                    <div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width:20px;">
                        <span class="carousel-control-prev-icon carousel-style" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </div>
                    <div>
                    <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next" style="width:20px;">
                        <span class="carousel-control-next-icon carousel-style" aria-hidden="true"></span>
                        <span class="sr-only ">Next</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="show-modal"> </a>
    </div>




<script>

const addAttributes = (element, attrObj) => {
  for (let attr in attrObj) {
    if (attrObj.hasOwnProperty(attr)) element.setAttribute(attr,attrObj[attr])
  }
};

const createCustomElement = (element,attributes,children) => {
  let customElement = document.createElement(element);
  if (children !== undefined) children.forEach(el => {
    if (el.nodeType) {
      if (el.nodeType === 1 || el.nodeType === 11) customElement.appendChild(el);
    } else {
      customElement.innerHTML += el;
    }
  });
  addAttributes(customElement,attributes);
  return customElement;
};


const printModal = content => {
  //  contenedor de afuera
  const modalContentEl = createCustomElement('div', {
    id: 'ed-modal-content',
    class: 'ed-modal-content'
  }, [content]),

  // contesnedor interno
  modalContainerEl = createCustomElement('div', {
   id: 'ed-modal-container',
   class: 'ed-modal-container'
  }, [modalContentEl]);

  var btn = document.createElement("button");
  var img = document.createElement("img");


  document.body.appendChild(modalContainerEl);

  document.body.appendChild(btn, img);


  const removeModal = () => document.body.removeChild(modalContainerEl);

  modalContainerEl.addEventListener('click', e => {
    if (e.target === modalContainerEl) removeModal();
  })
}

const blabla = `<h1>el contaiiiinaaaaar niembro</h1>`;

document.getElementById('show-modal').addEventListener('click', () => {

  printModal(blabla);

});
document.getElementById('show-modal2').addEventListener('click', () => {
  printModal(blabla);
});
document.getElementById('show-modal3').addEventListener('click', () => {
  printModal(blabla);
});

</script>


@endsection
