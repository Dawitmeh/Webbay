const app = Vue.createApp({

    data() {
        return {
            result: [],
            navigation: {
                home: {
                    tagName: '',
                    routeTo: ''
                },
                about: {
                    tagName: '',
                    routeTo: '',
                },
                services: {
                    tagName: '',
                    routeTo: ''
                },
                portofolio: {
                    tagName: '',
                    routeTo: ''
                },
                team : {
                    tagName: '',
                    routeTo: ''
                },
                blog: {
                    tagName: '',
                    routeTo: ''
                },
                dropdown: {
                    tagName: '',
                    routeTo: ''
                },
                contact: {
                    tagName: '',
                    routeTo: ''
                }
            },
            Body: {
                home: {
                    img: '',
                    title: '',
                    paragraph: ''
                },
                about: {
                    img: '',
                    title: '',
                    subTittle: '',
                    paragraph: '',
                },
                services: {

                },
            }
        }
    },
  async  created() {
       
            const res = await fetch('http://localhost:8000/api/templates')
            const result = await res.json()
            console.log('data from database', result[0])
            this.result = result[0]
            console.log('this is result', result[0].sections.body.About)


            // Navigations 
            this.navigation.home.tagName = result[0].sections.header.container[0].tagName
            this.navigation.home.routeTo = result[0].sections.header.container[0].routeTo
            this.navigation.about.tagName = result[0].sections.header.container[1].tagName
            this.navigation.about.routeTo = result[0].sections.header.container[1].routeTo
            this.navigation.services.tagName = result[0].sections.header.container[2].tagName
            this.navigation.services.routeTo = result[0].sections.header.container[2].routeTo
            this.navigation.portofolio.tagName = result[0].sections.header.container[3].tagName
            this.navigation.portofolio.routeTo = result[0].sections.header.container[3].routeTo
            this.navigation.team.tagName = result[0].sections.header.container[4].tagName
            this.navigation.team.routeTo = result[0].sections.header.container[4].routeTo
            this.navigation.blog.tagName = result[0].sections.header.container[5].tagName
            this.navigation.blog.routeTo = result[0].sections.header.container[5].routeTo
            this.navigation.dropdown.tagName = result[0].sections.header.container[6].tagName
            this.navigation.dropdown.routeTo = result[0].sections.header.container[6].routeTo
            
            // Body, Home
            this.Body.home.title = result[0].sections.body.Home[1].container[1].headline
            this.Body.home.paragraph = result[0].sections.body.Home[1].container[2].subHeadlines[0].content

            // About 
             this.Body.about.title = result[0].sections.body.About[1].headline
    },
   computed(){
       this.result
   }
})


app.mount('#app')