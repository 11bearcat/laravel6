import Logo from "./components/Logo";
import LogoSymbol from "./components/LogoSymbol";
import Colors from "./components/Colors";
import Typography from "./components/Typography";
import Mascot from "./components/Mascot";
import LoadersAndAnimations from "./components/LoadersAndAnimations";
import Wallpapers from "./components/Wallpapers";
import Illustrations from "./components/Illustrations";


export default {
    mode: "history",

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: "/",
            component: Logo,
        },

        {
            path: "/logo-symbol",
            component: LogoSymbol,
        },

        {
            path: "/colors",
            component: Colors,
        },

        {
            path: "/typography",
            component: Typography,
        },

        {
            path: "/mascot",
            component: Mascot,
        },

        {
            path: "/loaders-and-animations",
            component: LoadersAndAnimations,
        },

        {
            path: "/wallpapers",
            component: Wallpapers,
        },

        {
            path: "/illustrations",
            component: Illustrations,
        },
    ],
};
