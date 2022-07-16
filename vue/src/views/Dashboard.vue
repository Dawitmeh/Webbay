<template>
  <v-app id="inspire">
    <SideBar :drawer="drawer" />
    <Topbar @drawerEvent="drawer = !drawer" />
    <v-main style="background: #f5f5f540">
      <v-container class="py-8 px-6" fluid>
        <DashboardContent />
      </v-container>
    </v-main>
  </v-app>
</template>


<script>
import SideBar from '../components/Sidebar.vue'
import Topbar from '../components/Topbar.vue'
import DashboardContent from '../components/DashboardContent.vue'
import axios from 'axios'

export default {
    name: "App",
    template: '',
    components: {
      SideBar,
      Topbar,
      DashboardContent
    },
    data() {
      return {
        template: ''
      }
    },
    methods: {
      drawer(){
        console.log('clicked')
      },
      onButtonClick(item) {
                console.log('click on ' + item.no)
            }
    },
    created(){
      let response = axios.get('https://nova.gotechint.com/')
      console.log('template', response)
      this.template = response.data
    }
  }
</script>

<style scoped>
    .overlap-icon {
        position: absolute;
        top: -33px;
        text-align: center;
        padding-top: 12px;
    }
</style>
