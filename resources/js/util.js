import Noty from 'noty'

export default  {

    Noty(message, type) {
        new Noty({
            type: type,
            layout: 'topRight',
            text: message,
            progressBar: true,
            timeout: 4000,
            theme: 'mint',
            animation: {
                open: 'animated bounceInRight',
                close: 'animated bounceOutRight'
            }
        }).show();
    },

    pickValidationError(data) {
        return data
    },
    
}