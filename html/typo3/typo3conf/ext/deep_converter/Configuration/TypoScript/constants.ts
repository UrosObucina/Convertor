
plugin.tx_deepconverter_converter {
    view {
        # cat=plugin.tx_deepconverter_converter/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:deep_converter/Resources/Private/Templates/
        # cat=plugin.tx_deepconverter_converter/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:deep_converter/Resources/Private/Partials/
        # cat=plugin.tx_deepconverter_converter/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:deep_converter/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_deepconverter_converter//a; type=string; label=Default storage PID
        storagePid =
    }
}
