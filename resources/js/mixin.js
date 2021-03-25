export default {
	data(){
		return {
			baseUrl: baseUrl,
			dataList:[],
		    formData:{},
		    optionData:[],
		    imageData:{},
		    emptyImageData:{},
		    activeModal:'',
		    filter:{},
		    pageSize:[10,25,50,100],
		    gridData:{},
		    modalLoading:false,
		    previousPageTotal:0,
		    sort:'id',
		    order:'desc',
		    listPerPage:10,
		    currentPageNo:1,
		    emptyImagePath:appUrl + '/img/no_image.png'
		}
	},
	methods:{
	    initStatus(){
	    	this.formData.status=1;
	    },
	    dataUrl: function () {
            return this.$route.meta.dataUrl;
        },
        isEmpty(obj){
        	return Object.keys(obj).length === 0;
        },
		isObject (v) {
	      return (typeof v ==='object') ? true : false;
	    },
		getImage: function (path) {
            return appUrl + '/' + path;
        },
        getEmptyImage(index){
        	return this.emptyImageData = this.emptyImagePath;
        }
	}
}
