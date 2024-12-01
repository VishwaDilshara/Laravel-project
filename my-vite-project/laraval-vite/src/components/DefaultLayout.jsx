import { Navigate, Outlet } from 'react-router-dom';
import { useStateContext } from '../contexts/contextprovider';

export default function DefaultLayout() {
    // Correctly call useStateContext as a function
    const { user, token } = useStateContext();

    // Redirect to login page if no token exists
    if (!token) {
        return <Navigate to="/login" />;
    }

    return (
        <div id = "defaultLayout">
            <div className='content'>
         <header>
            <div>
                Header
            </div>
            <div>
                User Info
            </div>
         </header>
         <main>
         <Outlet />

         </main>
            </div>
        </div>
    );
}
