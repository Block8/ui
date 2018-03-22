
class AdminUI
{
    constructor() {
        let self = this;
        self.components = [];

        $(document).ready(function () {
            for (let idx in self.components) {
                self.components[idx].ready();
            }
        });
    }

    register(component) {
        component.setUi(this);
        this.components.push(component);
    }
}
