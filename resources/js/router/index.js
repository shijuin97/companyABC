
import Voucher from '../views/VoucherComponent.vue'

import Vue from 'vue'
import Router from 'vue-router'
import Meta from 'vue-meta'

Vue.use(Router)
Vue.use(Meta)

// if(window.location.pathname === "/"){
//     location.href = '/admin/login';
// }
export default {
    mode: 'history',
    scrollBehavior() {
        return {
            x: 0,
            y: 0
        };
    },
    routes: [
        {
            path: '/voucher',
            name: 'voucher',
            component: Voucher,
        },
    ]

}
