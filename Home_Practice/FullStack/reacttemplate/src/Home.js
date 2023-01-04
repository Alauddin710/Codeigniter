import axios from "axios";
import { useEffect, useState } from "react";

function Home() {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/frontend/products");
    setProducts(products.data);
  };
  return (
    <div className="home-container">
      <div className="main-slider slider slick-initialized slick-slider">
        <div
          class="slider-item"
          style={{
            backgroundImage: "url('assets/images/slideshow1-2.jpg')",
            backgroundPosition: "50%",
            backgroundRepeat: "no-repeat",
          }}
        >
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-12 offset-lg-6 offset-md-6">
                <div class="slider-caption">
                  <span class="lead">Trendy dress</span>
                  <h1 class="mt-2 mb-5">
                    <span class="text-color">Winter </span>Collection
                  </h1>
                  <a href="#" class="btn btn-main">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="category section pt-3 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-6">
              <div class="cat-item mb-4 mb-lg-0">
                <img src="assets/images/cat-1.jpg" alt="" class="img-fluid" />
                <div class="item-info">
                  <p class="mb-0">Stylish Leather watch</p>
                  <h4 class="mb-4">
                    up to <strong>50% </strong>off
                  </h4>
                  <a href="#" class="read-more">
                    Shop now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-6">
              <div class="cat-item mb-4 mb-lg-0">
                <img src="assets/images/cat-2.jpg" alt="" class="img-fluid" />
                <div class="item-info">
                  <p class="mb-0">Ladies hand bag</p>
                  <h4 class="mb-4">
                    up to <strong>40% </strong>off
                  </h4>
                  <a href="#" class="read-more">
                    Shop now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-6">
              <div class="cat-item">
                <img src="assets/images/cat-3.jpg" alt="" class="img-fluid" />
                <div class="item-info">
                  <p class="mb-0">Trendy shoe</p>
                  <h4 class="mb-4">
                    up to <strong>50% </strong>off
                  </h4>
                  <a href="#" class="read-more">
                    Shop now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section products-main">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="title text-center">
                <h2>New arrivals</h2>
                <p>The best Online sales to shop these weekend</p>
              </div>
            </div>
          </div>

          {/* product query */}

          <div class="row">
            {products.map((pr,index)=>(
            <div class="col-lg-3 col-12 col-md-6 col-sm-6 mb-5">
              <div class="product">
                <div class="product-wrap">
                  <a href="/product-single">
                    <img
                      class="img-fluid w-100 mb-3 img-first"
                      src={`http://localhost:8080/${pr.product_image}`}
                      alt="product-img"
                    />
                  </a>
                  {/* <a href="/product-single">
                    <img
                      class="img-fluid w-100 mb-3 img-second"
                      src="assets/images/444.jpg"
                      alt="product-img"
                    />
                  </a> */}
                </div>

                <span class="onsale">Sale</span>
                <div class="product-hover-overlay">
                  {/* <a href="#">
                    <i class="tf-ion-android-cart"></i>
                  </a> */}
                  <a href="#">
                    <i class="tf-ion-ios-heart"></i>
                  </a>
                </div>

                <div class="product-info">
                  <h2 class="product-title h5 mb-0">
                    <a href="#"> {pr.product_name}</a>
                  </h2>
                  <span class="price">{pr.product_price}</span>
                </div>
              </div>
            </div>
            ))}
          </div>
        </div>
      </section>

      <section class="ads section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-6">
              <div class="ads-content">
                <span class="h5 deal">Deal of the day 50% Off</span>
                <h2 class="mt-3 text-white">Trendy Suit</h2>
                <p class="text-md mt-3 text-white">
                  Hurry up! Limited time offer.Grab ot now!
                </p>

                <div id="simple-timer" class="syotimer mb-5"></div>
                <a href="#" class="btn btn-main">
                  <i class="ti-bag mr-2"></i>Shop Now{" "}
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section products-list">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
              <img
                src="assets/images/adsv.jpg"
                alt="Product big thumb"
                class="img-fluid w-100"
              />
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
              <div class="widget-featured-entries mt-5 mt-lg-0">
                <h4 class="mb-4 pb-3">Best selllers</h4>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="/product-single">
                    <img
                      src="assets/images/p-1.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Keds - Kickstart Pom Pom</a>
                    </h6>
                    <p class="featured-entry-meta">$42.99</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-2.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Nike - Brasilia Medium Backpack</a>
                    </h6>
                    <p class="featured-entry-meta">$27.99</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-3.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Guess - GU7295</a>
                    </h6>
                    <p>$38.00</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-4.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Adidas Originals Cap</a>
                    </h6>
                    <p class="featured-entry-meta">$35.00</p>
                  </div>
                </div>
                <div class="media">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-5.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Big Star Flip Tops</a>
                    </h6>
                    <p class="featured-entry-meta">$10.60</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
              <div class="widget-featured-entries mt-5 mt-lg-0">
                <h4 class="mb-4 pb-3">New Arrivals</h4>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="/product-single">
                    <img
                      src="assets/images/p-7.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Keds - Kickstart Pom Pom</a>
                    </h6>
                    <p class="featured-entry-meta">$42.99</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-8.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Nike - Brasilia Medium Backpack</a>
                    </h6>
                    <p class="featured-entry-meta">$27.99</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-1.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Guess - GU7295</a>
                    </h6>
                    <p>$38.00</p>
                  </div>
                </div>
                <div class="media mb-3">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-2.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Adidas Originals Cap</a>
                    </h6>
                    <p class="featured-entry-meta">$35.00</p>
                  </div>
                </div>
                <div class="media">
                  <a class="featured-entry-thumb" href="#">
                    <img
                      src="assets/images/p-4.jpg"
                      alt="Product thumb"
                      width="64"
                      class="img-fluid mr-3"
                    />
                  </a>
                  <div class="media-body">
                    <h6 class="featured-entry-title mb-0">
                      <a href="#">Big Star Flip Tops</a>
                    </h6>
                    <p class="featured-entry-meta">$10.60</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="features border-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="feature-block">
                <i class="tf-ion-android-bicycle"></i>
                <div class="content">
                  <h5>Free Shipping</h5>
                  <p>On all order over $39.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="feature-block">
                <i class="tf-wallet"></i>
                <div class="content">
                  <h5>30 Days Return</h5>
                  <p>Money back Guarantee</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="feature-block">
                <i class="tf-key"></i>
                <div class="content">
                  <h5>Secure Checkout</h5>
                  <p>100% Protected by paypal</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
              <div class="feature-block">
                <i class="tf-clock"></i>
                <div class="content">
                  <h5>24/7 Support</h5>
                  <p>All time customer support </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
export default Home;
