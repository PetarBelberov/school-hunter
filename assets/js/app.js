import '../css/app.scss';
import Vue from 'vue';
import collapse from './collapse.vue' 

var $ = require('jquery');

/**
* Create a fresh Vue Application instance
*/
// new Vue({
//     el: '#collapse',
//     components: {collapse}
//   });


  var accordion = {
    props: [
      'title'
    ],
    data() {
      return {
        active: false,
      }
    },
    template: `
              <div class="accordion-content">
                  <div class="tab__header">
                      <a href="#" class="tab__link p-4 block bg-blue-dark hover:bg-blue-darker no-underline text-white border-b-2 border-white flex justify-between" @click.prevent="active = !active">
                          <h4 class="listing-section__title">{{ title }}</h4>
                          <span class="down-Arrow" v-show="!active">&#9660;</span>
                          <span class="up-Arrow" v-show="active">&#9650;</span>
                      </a>
                  </div>
                  <div class="tab__content p-2" v-show="active"><slot /></div>            
              </div>
  `
  }

  var subaccordion = {
    props: [
      'title'
    ],
    data() {
      return {
        active: false,
      }
    },
    template: `
              <div class="subaccordion-content">
                  <div class="tab__header">
                      <a href="#" class="tab__link p-4 block bg-blue-dark hover:bg-blue-darker no-underline text-white border-b-2 border-white flex justify-between" @click.prevent="active = !active">
                          <h5 class="listing-section__title">{{ title }}</h5>
                          <span class="down-Arrow" v-show="!active">&#9660;</span>
                          <span class="up-Arrow" v-show="active">&#9650;</span>
                      </a>
                  </div>
                  <div class="tab__content p-2" v-show="active"><slot /></div>            
              </div>
  `
  }
  
  var app = new Vue({
    el: '.accordion-container',
    components: {
      accordion,
      subaccordion
    }
  });