app.PageView = Backbone.View.extend({
  tagName: 'div',
  render: function(eventName) {
    app.renderTemplate( '/cards/' + app.Page, this.el, this.model.toJSON());
    return this;
  },
/*  render: function(){
    this.$el.html(this.template());
    return this; // enable chained calls
  },*/
  initialize: function(){
  //  this.model.on('change', this.render, this);
  //  this.model.on('destroy', this.remove, this); // remove: Convenience Backbone's function for removing the view from the DOM
  },      
  events: {
//    'dblclick label' : 'edit',
//    'keypress .edit' : 'updateOnEnter',
//    'blur .edit' : 'close',
 //   'click .toggle': 'toggleCompleted',
 //   'click .destroy': 'destroy'
  },
  destroy: function(){
    this.model.destroy();
  }    
});