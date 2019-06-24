
// #############################################
// ################# SCROLL ####################
// #############################################

const appli = {
    SELECTOR: {
        elActu: document.querySelector('#actu')
    },

    PROPERTIES: {
        urlApiRest: '',
        categoryID: '',
        postPerPage: 9,
        offset: 0,
        totalPage: 0,
        currentPage: 1,
        etatScroll: false
    },

    EVENT : {
        defile : function(){
            document.addEventListener('scroll', function(){
                appli.displayPosts();
            })
        }
    },

    init: function () {
        if (this.SELECTOR.elActu !== null) {
            this.PROPERTIES.urlApiRest = this.SELECTOR.elActu.dataset.url;
            //dataset recupere la propriété data de l'html
            this.PROPERTIES.categoryID = this.SELECTOR.elActu.dataset.categoryid;
            if (this.PROPERTIES.urlApiRest !== '' && !isNaN(this.PROPERTIES.categoryID)) {
                this.infiniteScrollActu();
                this.EVENT.defile();
            }
        }
    },
    infiniteScrollActu: async function () {
        this.PROPERTIES.offset = (this.PROPERTIES.currentPage - 1) * this.PROPERTIES.postPerPage;
        response = await fetch(this.PROPERTIES.urlApiRest + '?_embed=true&per_page=' + this.PROPERTIES.postPerPage + '&offset=' + this.PROPERTIES.offset+'&categories='+this.PROPERTIES.categoryID);
        this.PROPERTIES.totalPage = response.headers.get('X-WP-TotalPages')
        data = await response.json();
        if (data.length > 0) {
            for (post of data) {
                console.log(post);
                this.SELECTOR.elActu.innerHTML += `
               <div class="img_actu xs-col-12 sm-col-12 md-col-3 lg-col-3 xl-col-3">
                 <img src="${post._embedded['wp:featuredmedia'][0].media_details.sizes.medium.source_url}" class="card-img-top">
                        </div>
                 <div class="content_post sm-col-12 xs-col-12 md-offset-1 md-col-8 lg-offset-1 lg-col-8 xl-offset-1 xl-col-8">
                        <p class="titre_article_actu">${post.title.rendered}</p>
                        <p>${post.content.rendered}</p>
                        <p> Publié le ${post.date} </p>
                        <div class="underline_actu"></div>
                        </div>
                 `
            }
            this.PROPERTIES.currentPage += 1;
            this.PROPERTIES.etatScroll = false;

        }
    },
    displayPosts : function(){
        pageHeight = document.documentElement.offsetHeight;
        windowHeight = window.innerHeight;
        scrollPosition = window.scrollY ||  window.pageYOffset || document.body.scrollTop + (document.documentElement && document.documentElement.scrollTop || 0 );

        if (pageHeight <= windowHeight+scrollPosition){
            if (this.PROPERTIES.currentPage <= this.PROPERTIES.totalPage){
                if (this.PROPERTIES.etatScroll === false ){
                    this.PROPERTIES.etatScroll = true;
                    this.infiniteScrollActu();
                }
            }
        }
    }
}

window.onload = appli.init();


