import { Navigate, Outlet } from 'react-router-dom';
import { useStateContext } from '../contexts/contextprovider';

export default function GuestLayout() {
    const { user, token } = useStateContext();  // Get user and token from context

    // If there is a token, redirect to home
    if (token) {
        return <Navigate to="/" />;
    }

    return (
        <div>
            <div>
                GuestLayout
            </div>
            <Outlet />
        </div>
    );
}
