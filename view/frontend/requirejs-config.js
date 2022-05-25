var config = {
    map: {
        '*': {
            'AjaxCart': 'MageShop_AjaxShoppingCartUpdate/js/cartValueIncDec',
            'CartQtyUpdate': 'MageShop_AjaxShoppingCartUpdate/js/cartQtyUpdate'
        }
    },
    shim: {
        AjaxCart: {
            deps: ['jquery']
        },
        CartQtyUpdate: {
            deps: ['jquery']
        }
    }
};