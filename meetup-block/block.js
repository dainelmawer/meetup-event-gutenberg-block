const { registerBlockType } = wp.blocks;
const el = wp.element.createElement;
const { TextControl } = wp.components;
const __ = wp.i18n.__; 

registerBlockType( 'dainemawer/meetup' , {
    title: __( 'Meetup Event Embed' ),
    description: __( 'Uses the the Public Meetup API to allow you to embed your events in posts or pages' ),
    keywords: [__( 'embed' ), __( 'meetup' ), __( 'widget' )],
    html: false,
    icon: 'tickets',
    category: 'widgets',
    attributes: {
        id: {
            type: 'string'
        },
        event: {
            type: 'string'
        }
    },
    edit: () => {
        
    },

    save: () => {
        return null;
    }
    
});