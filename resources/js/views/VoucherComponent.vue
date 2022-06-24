<template>
  <div>
    <div id="login-signup" class="container">
      <div class="row p-0 d-flex justify-content-center">
        <div class="col-12 col-lg-7 p-0">
          <div class="frame">
            <div class="form-signin" v-if="photoForm === false">
              <div class="input-styling">
                <label for="email">Email</label>
                <input
                  type="text"
                  name="email"
                  class="form-styling"
                  id="exampleInputEmail"
                  placeholder=""
                  v-model="email"
                />
              </div>
              <div class="input-styling">
                <button type="submit" class="btn-signin" @click="submit()">
                  Submit
                </button>
              </div>
            </div>
            <div class="form-signin" v-else>
              <div class="input-styling">
                <label
                  class="text-gray-900 font-weight-bold m-0"
                  for="name"
                  >Upload a picture
                </label>
                <div id="preview">
                  <img
                    v-bind:src="imagePreview"
                    width="100"
                    v-show="showPreview"
                  />
                  <button
                    @click="removeImage()"
                    class="btn"
                    v-show="showPreview"
                  >
                    <i class="icofont-close"></i>
                  </button>
                </div>
                <input
                  ref="fileInput"
                  type="file"
                  @change="onFileChange"
                  accept="image/*"
                />
                <p class="my-1 font-weight-bold">max file size: 2MB</p>
              </div>
              <div class="input-styling">
                <button type="submit" class="btn-signin" @click="redeem()">
                  Redeem Code
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  components: {},
  data() {
    return {
      email: "",
      customerData: {
        id: "",
        email: "",
      },
      qualify: false,
      timerCount: 0,
      imagePreview: null,
      showPreview: false,
      image: null,
      photoForm: false,
    };
  },
  mounted() {},
  created() {},
  methods: {
    onFileChange(e) {
      this.image = e.target.files[0];
      let reader = new FileReader();

      reader.addEventListener(
        "load",
        function () {
          this.showPreview = true;
          this.imagePreview = reader.result;
        }.bind(this),
        false
      );

      if (this.image && this.image.size < 2000000) {
        if (/\.(jpe?g|png|gif)$/i.test(this.image.name)) {
          reader.readAsDataURL(this.image);
        }
      } else {
        this.$alert("Please upload file less than 2MB", "Error", "error").then(
          () => {
            this.imagePreview = null;
            this.showPreview = false;
            this.image = null;
            this.$refs.fileInput.value = "";
          }
        );
      }
    },
    removeImage() {
      this.imagePreview = null;
      this.showPreview = false;
      this.image = null;
      this.$refs.fileInput.value = "";
    },
    submit() {
      axios.defaults.baseURL = "/api";
      axios
        .post("/checkCustomerEligible", {
          email: this.email,
        })
        .then((response) => {
          this.customerData = response.data;
          console.log(response.data);
          this.timerCount = 600;
          this.qualify = true;
          this.photoForm = true;
          let self = this;
          self.$session.start();
          self.$session.set("customer_data", this.customerData);
        })
        .catch((error) => {
          console.log(error);
          this.$alert(error.response.data.error);
        });
    },
    redeem() {
      console.log(this.timerCount < 1);
      if (this.timerCount < 1) {
        this.qualify = false;
      }
      var _customer_id = this.$session.get("customer_data").id;
      let formData = new FormData();
      formData.append("url", this.image);
      formData.append("customer_id", _customer_id);
      formData.append("qualify", this.qualify);
      axios.defaults.baseURL = "/api";
      axios
        .post("/validatePhotoSubmission", formData)
        .then((response) => {
          console.log(response.data);
          this.timerCount = 0;
          this.qualify = false;
          this.photoForm = false;
          this.email = "";
          this.$session.remove("customer_data");
          this.$alert("Your cash voucher code: " + response.data);
        })
        .catch((error) => {
          console.log(error);
          this.timerCount = 0;
          this.qualify = false;
          this.photoForm = false;
          this.email = "";
          this.$session.remove("customer_data");
          this.$alert(error.response.data.error);
        });
    },
  },
  watch: {
    timerCount: {
      handler: function (value) {
        if (value > 0) {
          setTimeout(() => {
            this.timerCount--;
          }, 1000);
        }
      },
      immediate: true, // This ensures the watcher is triggered upon creation
    },
  },
};
</script>
