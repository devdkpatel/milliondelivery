const { registerBlockType } = wp.blocks;
const { InspectorControls } = wp.blockEditor;
const { PanelBody, RangeControl, ToggleControl } = wp.components;

registerBlockType('ebmp/upcoming-events',{
    title:'Upcoming Events',
    icon:'calendar',
    category:'widgets',

    attributes:{
        count:{type:'number',default:3},
        showLocation:{type:'boolean',default:true}
    },

    edit:({attributes,setAttributes})=>{

        return (
            <>
            <InspectorControls>
                <PanelBody title="Settings">
                    <RangeControl
                        label="Number of events"
                        value={attributes.count}
                        onChange={(v)=>setAttributes({count:v})}
                        min={1}
                        max={10}
                    />
                    <ToggleControl
                        label="Show Location"
                        checked={attributes.showLocation}
                        onChange={(v)=>setAttributes({showLocation:v})}
                    />
                </PanelBody>
            </InspectorControls>

            <p>Upcoming Events Block (Preview)</p>
            </>
        );
    },

    save:()=>null
});
