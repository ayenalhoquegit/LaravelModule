import BlogDashboard  from './BlogDashboard';
import About  from './About';
const routes = [
	{ path:'/', component:BlogDashboard, meta:{ pageTitle:'User Dashboard', bredCrumbs:['Home','Dashboard']}},
	{ path:'/about', component:About, meta:{ pageTitle:'User Dashboard', bredCrumbs:['Home','Dashboard']}}

];

export default routes;
