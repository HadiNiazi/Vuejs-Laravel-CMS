
import Dashboard from './components/Dashboard';
import Profile from './components/Profile';
import Index from './components/Users/Index';

  export default {
    mode:'history',
    routes: [
        {
         path: '/admin/dashboard',
         component: Dashboard
        },
        {
         path: '/admin/profile',
         component: Profile
        },
        {
        path: '/admin/users',
        component: Index
        },
      ]
  };
