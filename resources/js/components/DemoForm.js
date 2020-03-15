import Component from '../component';

/**
 * Weather Widget frontend class
 */
export default class DemoForm extends Component
{
    /**
     * Constructor
     * 
     * @var {array} props Array with properties
     * @return {void}
     */
    constructor(props)
    {
        super();
        this.id = props.id;

        this.submitErrorsId = props.id + '-submit-errors';

        this.fields = {
            number: `#${this.id} input[name$="number"]`,
        }
    }

    /**
     * Executed when the document is ready
     * 
     * @return {void}
     */
    mount()
    {
        const instance = this;
        $(`#${this.id} :submit`).click(function (event) {
            event.preventDefault();
            const valid = instance.validateForm();
            if (valid) {
                $(`#${instance.id}`).submit();
            }
        });

        $(this.fields.number).focus(function (event) {
            $(instance.fields.number).removeClass('is-invalid');
        });

        window.setTimeout(function() {
            $(`#${instance.id} .alert-success`).fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);
    }

    /**
     * Check if the form data is valid or not
     * 
     * @return {boolean}
     */
    validateForm ()
    {
        const value = $(this.fields.number).val().trim();
        let message;

        if (!value.length) {
            message = 'The field cannot be empty.';
        } else if (!value.match(/^[0-9]+$/)) {
            message = 'The field can only contain numbers.';
        } else {
            return true;
        }

        this.showError('danger', message);
        $(this.fields.number).addClass('is-invalid');
        return false;
    }

    /**
     * Shows an error message
     * 
     * @param {string} type Error type
     * @param {string} message Error text message
     * @return {void}
     */
    showError(type, message)
    {
        let toRender = `
        <div class="alert alert-${type} mt-2">
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `;
        $(`#${this.submitErrorsId}`).empty().append(toRender);
        $(`#${this.submitErrorsId} .alert`).alert();
    }
}
