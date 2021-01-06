
import Dashboard from './components/Dashboard';
import Profile from './components/Profile';
import Users from './components/Users';
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
        component: Users
        },
      ]
  };
