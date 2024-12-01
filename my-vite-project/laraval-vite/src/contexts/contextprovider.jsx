import { createContext, useState, useContext } from "react";

// Create context with default values
const stateContext = createContext({
    user: null,
    token: null,
    setUser: () => {},
    setToken: () => {},
});

// Context Provider component
export const ContextProvider = ({ children }) => {
    const [user, setUser] = useState(null);
    const [token, _setToken] = useState(1234);

    const setToken = (token) => {
        _setToken(token);
        if (token) {
            localStorage.setItem('ACCESS_TOKEN', token);
        } else {
            localStorage.removeItem('ACCESS_TOKEN');
        }
    };

    return (
        <stateContext.Provider value={{
            user,
            token,
            setUser,
            setToken,
        }}>
            {children}
        </stateContext.Provider>
    );
};

// Custom hook to use the context
export const useStateContext = () => useContext(stateContext);
